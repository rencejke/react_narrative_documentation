import React from 'react';
import { StoreContext } from '../../../../../../../store/StoreContext';
import useQueryData from '../../../../../../custom-hook/useQueryData';
import UIHeader from '../partials/UIHeader';
import UINavigation from '../../../partials/UINavigation';
import UIFooter from '../../../partials/UIFooter';
import PicturesMain from './PicturesMain';

const UIPictures = () => {
  const { store, dispatch } = React.useContext(StoreContext);
  const [info, setInfo] = React.useState(null);

  const {
    isLoading,
    isFetching,
    error,
    data: pictures,
  } = useQueryData(
    "/v1/pictures",
    "get", // method
    "pictures", // key
  );

  return (
    <>
      <UIHeader />
      <div className="flex">
        <UINavigation />
        <PicturesMain isLoading={isLoading} isFetching={isFetching} pictures={pictures} />
      </div>
      <UIFooter />
    </>
  );
};

export default UIPictures
