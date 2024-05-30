import React from 'react';
import { StoreContext } from '../../../../../../../store/StoreContext';
import useQueryData from '../../../../../../custom-hook/useQueryData';
import UIHeader from '../partials/UIHeader';
import UINavigation from '../../../partials/UINavigation';
import UIFooter from '../../../partials/UIFooter';
import CoverMain from './CoverMain';

const UICover = () => {
  const { store, dispatch } = React.useContext(StoreContext);
  const [info, setInfo] = React.useState(null);

  const {
    isLoading,
    isFetching,
    error,
    data: cover,
  } = useQueryData(
    "/v1/cover",
    "get", // method
    "cover", // key
  );

  return (
    <>
      <UIHeader />
      <div className="flex">
        <UINavigation />
        <CoverMain isLoading={isLoading} isFetching={isFetching} cover={cover} />
      </div>
      <UIFooter />
    </>
  );
};

export default UICover;
